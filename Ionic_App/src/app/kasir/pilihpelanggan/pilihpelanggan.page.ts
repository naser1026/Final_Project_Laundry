import { Component, OnInit, ViewChild } from '@angular/core';
import { ApiServiceService } from 'src/app/api/api-service.service';
import { Router } from '@angular/router';
import { ModalController } from '@ionic/angular';

@Component({
  selector: 'app-pilihpelanggan',
  templateUrl: './pilihpelanggan.page.html',
  styleUrls: ['./pilihpelanggan.page.scss'],
})
export class PilihpelangganPage implements OnInit {
  searchQuery: string = '';
  DataCustomer: any;
  DataDurasi: any[] = [];

  filteredDataCustomer: any[] = [];
  selectedCustomer: any;

  id: any;

  isModalOpen = false;

  constructor(
    private api: ApiServiceService,
    private router: Router,
    private modalController: ModalController
  ) {}

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

  GetDuration() {
    this.api.GetListDuration().subscribe((res: any) => {
      this.DataDurasi = res['data']['duration'];
      console.log('Data Durasi ===>' + JSON.stringify(this.DataDurasi));
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

  checkForRefresh() {
    const navigation = this.router.getCurrentNavigation();
    if (navigation?.extras.state && navigation.extras.state['refresh']) {
      this.GetAllCustomer();
    }
  }

  handleRefresh(event: any) {
    this.GetAllCustomer();
    event.target.complete();
  }

  openModal(customer: any) {
    this.selectedCustomer = customer;
    this.isModalOpen = true;
  }

  onWillDismiss(event: any) {
    this.isModalOpen = false;
  }

  dismissModal() {
    this.isModalOpen = false;
    this.modalController.dismiss();
  }

  selectDuration(durasi: any) {
    this.dismissModal();
    this.router.navigate(['/addpesanan'], {
      state: {
        customer: this.selectedCustomer,
        duration: durasi,
      },
    });
  }

  ngOnInit() {
    this.GetAllCustomer();
    this.checkForRefresh();
    this.GetDuration();
  }
}

function stripHTML(text: string): string {
  const doc = new DOMParser().parseFromString(text, 'text/html');
  return doc.body.textContent || '';
}
