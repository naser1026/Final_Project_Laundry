import { Component, OnInit } from '@angular/core';
import { ApiServiceService } from 'src/app/api/api-service.service';

@Component({
  selector: 'app-pesanan',
  templateUrl: './pesanan.page.html',
  styleUrls: ['./pesanan.page.scss'],
})
export class PesananPage implements OnInit {
  selectTabs = 'Antrian';
  searchQuery: string = '';
  DataCustomer: any;
  DataOrder: any[] = [];
  DataPaket: any[] = [];
  DataDurasi: any[] = [];

  DataOrderAntrian: any[] = [];
  DataOrderSiapAmbil: any[] = [];

  filteredDataCustomer: any[] = [];

  constructor(private api: ApiServiceService) {}

  GetOrder() {
    this.api.GetListOrder().subscribe((res: any) => {
      this.DataOrder = res['data']['orders'].map((order: any) => {
        const customer = this.DataCustomer.find(
          (cust: any) => cust.id === order.id_customer
        );
        return {
          ...order,
          customer_name: customer ? customer.name : 'Unknown',
        };
      });
      this.filterDataOrder();
      console.log('Data Order ===>' + JSON.stringify(this.DataOrder));
    });
  }

  filterDataOrder() {
    const query = this.searchQuery.toLowerCase();
    this.DataOrderAntrian = this.DataOrder.filter(
      (order) =>
        order.order_status === 'Antrian' &&
        (order.customer_name.toLowerCase().includes(query) ||
          order.invoice.toLowerCase().includes(query))
    );
    this.DataOrderSiapAmbil = this.DataOrder.filter(
      (order) =>
        order.order_status === 'Siap Ambil' &&
        (order.customer_name.toLowerCase().includes(query) ||
          order.invoice.toLowerCase().includes(query))
    );
  }

  // GetOrder() {
  //   this.api.GetListOrder().subscribe((res: any) => {
  //     this.DataOrder = res['data']['orders'].map((order: any) => {
  //       const customer = this.DataCustomer.find(
  //         (cust: any) => cust.id === order.id_customer
  //       );

  //       const firstPackageId = order.list_id_package[0]; // Mengambil ID paket pertama
  //       const packageData = this.DataPaket.find(
  //         (pkg: any) => pkg.id === firstPackageId
  //       );
  //       const duration = packageData
  //         ? this.DataDurasi.find(
  //             (dur: any) => dur.id === packageData.id_duration
  //           )
  //         : null;

  //       return {
  //         ...order,
  //         customer_name: customer ? customer.name : 'Unknown',
  //         duration_name: duration ? duration.name : 'Unknown',
  //       };
  //     });
  //     console.log('Data Order ===>' + JSON.stringify(this.DataOrder));
  //   });
  // }

  GetPaket() {
    this.api.GetListOrder().subscribe((res: any) => {
      this.DataPaket = res['data']['packages'];
      console.log('Data Paket ===>' + JSON.stringify(this.DataPaket));
    });
  }

  GetDuration() {
    this.api.GetListDuration().subscribe((res: any) => {
      this.DataDurasi = res['data']['duration'];
      console.log('Data Durasi ===>' + JSON.stringify(this.DataDurasi));
    });
  }

  GetAllCustomer() {
    this.api.GetListCustomer().subscribe((res: any) => {
      this.DataCustomer = res['data']['customers'].map((customer: any) => {
        return {
          ...customer,
          name: stripHTML(customer.name),
          phone_number: stripHTML(customer.phone_number),
        };
      });
      this.filteredDataCustomer = this.DataCustomer;
      console.log('Data Customer ===>' + JSON.stringify(this.DataCustomer));
    });
  }

  filterCustomers() {
    const query = this.searchQuery.toLowerCase();
    this.filteredDataCustomer = this.DataCustomer.filter((customer: any) => {
      return (
        customer.name.toLowerCase().includes(query) ||
        customer.phone_number.toLowerCase().includes(query)
      );
    });
  }

  ngOnInit() {
    this.GetPaket();
    this.GetOrder();
    this.GetAllCustomer();
  }
}

function stripHTML(text: string): string {
  const doc = new DOMParser().parseFromString(text, 'text/html');
  return doc.body.textContent || '';
}
