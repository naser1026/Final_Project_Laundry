import { Component, OnInit, ViewChild } from '@angular/core';
import { ApiServiceService } from 'src/app/api/api-service.service';
import type { IonInput } from '@ionic/angular';
import { AlertController } from '@ionic/angular';
import { Router } from '@angular/router';

@Component({
  selector: 'app-addpelanggan',
  templateUrl: './addpelanggan.page.html',
  styleUrls: ['./addpelanggan.page.scss'],
})
export class AddpelangganPage implements OnInit {
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
  };
  constructor(
    private api: ApiServiceService,
    private alertController: AlertController,
    private router: Router
  ) {}

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

  doPostCreateCustomer() {
    this.api.CreateCustomer(this.form).subscribe(
      (data) => {
        const jsonResponse = JSON.parse(JSON.stringify(data));
        console.log(jsonResponse.id);
        console.log('Success ==> ' + JSON.stringify(data));
        this.presentAlert('Berhasil', 'Pelanggan berhasil ditambahkan', true);
      },
      (err) => {
        console.error('Gagal Create user ===> ', err.status);
        this.presentAlert('Gagal', 'Harap mengisi semua form terlebih dahulu');
      }
    );
  }

  ngOnInit() {}
}
