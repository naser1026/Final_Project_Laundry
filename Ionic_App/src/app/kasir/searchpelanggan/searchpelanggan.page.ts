import { Component, OnInit, ViewChild } from '@angular/core';
import { ApiServiceService } from 'src/app/api/api-service.service';
import { AlertController } from '@ionic/angular';
import { Router } from '@angular/router';

@Component({
  selector: 'app-searchpelanggan',
  templateUrl: './searchpelanggan.page.html',
  styleUrls: ['./searchpelanggan.page.scss'],
})
export class SearchpelangganPage implements OnInit {
  searchQuery: string = '';
  DataCustomer: any;
  filteredDataCustomer: any[] = [];

  id: any;

  constructor(
    private api: ApiServiceService,
    private alertController: AlertController,
    private router: Router
  ) {}

  editCustomer(customer: any) {
    console.log('Edit Customer:', customer); // Tambahkan log ini untuk debugging
    this.router.navigate(['/updatepelanggan'], {
      state: { customer: customer },
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

  private async presentAlert(header: any, message: any) {
    const alert = await this.alertController.create({
      header: header,
      message: message,
      buttons: ['OK'],
    });

    await alert.present();
  }

  doPostDeleteCustomer(id: any) {
    this.api.DeleteCustomer(id).subscribe(
      (data) => {
        const jsonResponse = JSON.parse(JSON.stringify(data));
        console.log(jsonResponse.id);
        console.log('Success ==> ' + JSON.stringify(data));
        this.presentAlert('Berhasil', 'Pelanggan berhasil dihapus');
        this.GetAllCustomer();
      },
      (err) => {
        console.error('Gagal Create user ===> ', err.status);
        this.presentAlert('Gagal', 'Pelanggan tidak ditemukan');
      }
    );
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

  ngOnInit() {
    this.GetAllCustomer();
    this.checkForRefresh();
  }
}
function stripHTML(text: string): string {
  const doc = new DOMParser().parseFromString(text, 'text/html');
  return doc.body.textContent || '';
}
