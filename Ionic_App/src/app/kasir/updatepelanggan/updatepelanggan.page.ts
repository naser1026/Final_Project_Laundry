import { Component, OnInit, ViewChild } from '@angular/core';
import { ApiServiceService } from 'src/app/api/api-service.service';
import type { IonInput } from '@ionic/angular';
import { AlertController } from '@ionic/angular';
import { Router } from '@angular/router';

@Component({
  selector: 'app-updatepelanggan',
  templateUrl: './updatepelanggan.page.html',
  styleUrls: ['./updatepelanggan.page.scss'],
})
export class UpdatepelangganPage implements OnInit {
  searchQuery: string = '';
  DataCustomer: any;
  filteredDataCustomer: any[] = [];
  inputModel = '';

  @ViewChild('ionInputEl', { static: true }) ionInputEl!: IonInput;

  onInput(ev: any) {
    const value = ev.target!.value;

    // Removes non alphanumeric characters
    const filteredValue = value.replace(/[^a-zA-Z0-9 ]+/g, '');

    /**
     * Update both the state variable and
     * the component to keep them in sync.
     */
    this.ionInputEl.value = this.inputModel = filteredValue;
  }
  form = {
    name: '',
    phone_number: '',
    created_by: '',
  };

  id = '';

  constructor(
    private api: ApiServiceService,
    private alertController: AlertController,
    private router: Router
  ) {
    const navigation = this.router.getCurrentNavigation();
    if (navigation?.extras.state) {
      const customer = navigation.extras.state['customer'];
      console.log('Received Customer:', customer); // Tambahkan log ini untuk debugging
      if (customer) {
        this.form.name = customer.name;
        this.form.phone_number = customer.phone_number;
        this.id = customer.id;
      }
    }
  }

  private async presentAlert(
    header: any,
    message: any,
    navigate: boolean = false
  ) {
    const alert = await this.alertController.create({
      header: header,
      message: message,
      buttons: [
        {
          text: 'OK',
          handler: () => {
            if (navigate) {
              this.router.navigate(['/searchpelanggan'], {
                state: { refresh: true },
              });
            }
          },
        },
      ],
    });

    await alert.present();
  }

  doPutUpdateCustomer() {
    this.api.UpdateCustomer(this.id, this.form).subscribe(
      (data) => {
        const jsonResponse = JSON.parse(JSON.stringify(data));
        console.log(jsonResponse.id);
        console.log('Success ==> ' + JSON.stringify(data));
        this.presentAlert('Berhasil', 'Pelanggan berhasil diedit', true);
      },
      (err) => {
        console.error('Gagal Update user ===> ', err.status);
        this.presentAlert('Gagal', 'Harap mengisi semua form terlebih dahulu');
      }
    );
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

  editCustomer(customer: any) {
    this.form.name = customer.name;
    this.form.phone_number = customer.phone_number;
    this.id = customer.id;
    this.router.navigate(['/updatepelanggan']);
  }

  ngOnInit() {}
}
function stripHTML(text: string): string {
  const doc = new DOMParser().parseFromString(text, 'text/html');
  return doc.body.textContent || '';
}
