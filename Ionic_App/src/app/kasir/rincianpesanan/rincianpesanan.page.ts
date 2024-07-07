import { Component, OnInit } from '@angular/core';
import { ApiServiceService } from 'src/app/api/api-service.service';
import { ActivatedRoute } from '@angular/router';
import { AlertController } from '@ionic/angular';
import { Router } from '@angular/router';

@Component({
  selector: 'app-rincianpesanan',
  templateUrl: './rincianpesanan.page.html',
  styleUrls: ['./rincianpesanan.page.scss'],
})
export class RincianpesananPage implements OnInit {
  orderDetails: any; // Menyimpan detail pesanan
  DataCustomer: any;
  DataOrder: any[] = [];
  id: any;
  constructor(
    private route: ActivatedRoute,
    private api: ApiServiceService,
    private alertController: AlertController,
    private router: Router
  ) {}

  ngOnInit() {
    this.route.params.subscribe((params) => {
      const id = params['id'];
      this.api.GetOrderDetail(id).subscribe((res: any) => {
        this.orderDetails = res['data'].orders;
      });
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

  openWhatsApp(phoneNumber: string) {
    const yourPhoneNumber = '085774418236';
    const message = encodeURIComponent(
      `Hallo Selamat datang di KiwiFresh ini adalah uji coba ${yourPhoneNumber}.`
    );
    const whatsappUrl = `https://wa.me/${phoneNumber}?text=${message}`;
    window.open(whatsappUrl, '_blank');
  }

  async presentPaymentTypeAlert() {
    const idCustomer = this.orderDetails.id_customer; // Pastikan id_customer diambil dari orderDetails

    const alert = await this.alertController.create({
      header: 'Pilih Metode Pembayaran',
      inputs: [
        {
          name: 'Tunai',
          type: 'radio',
          label: 'Tunai',
          value: 'Tunai',
          checked: true,
        },
        {
          name: 'NonTunai',
          type: 'radio',
          label: 'Non Tunai',
          value: 'NonTunai',
        },
      ],
      buttons: [
        {
          text: 'Cancel',
          role: 'cancel',
          handler: () => {
            console.log('Cancel clicked');
          },
        },
        {
          text: 'OK',
          handler: (data) => {
            this.updatePaymentType(idCustomer, data);
          },
        },
      ],
    });

    await alert.present();
  }

  updatePaymentType(idCustomer: any, paymentType: string) {
    this.api.UpdateStatusPayment(idCustomer).subscribe(
      (data) => {
        console.log('Update Payment Type Success ==> ', data);
        this.presentAlert('Berhasil', 'Status pembayaran berhasil diperbarui');
        // Refresh order detail or any relevant data
      },
      (err) => {
        console.error('Gagal update payment type ===> ', err);
        this.presentAlert('Gagal', 'Gagal memperbarui status pembayaran');
      }
    );
  }
}
