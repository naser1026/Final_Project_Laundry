import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { ApiServiceService } from 'src/app/api/api-service.service';
import { AlertController, ModalController } from '@ionic/angular';

@Component({
  selector: 'app-addpesanan',
  templateUrl: './addpesanan.page.html',
  styleUrls: ['./addpesanan.page.scss'],
})
export class AddpesananPage implements OnInit {
  DataPaket: any[] = [];
  customer: any;
  duration: any;
  totalWeight = 0;
  totalPieces = 0;
  totalDistance = 0;
  totalPrice = 0;

  DataParfum: any[] = [];
  DataDiskon: any[] = [];

  parfum: string = '';
  diskon: string = '';
  catatan: string = '';

  isModalOpen = false;
  form = {
    list_id_package: '',
    list_count: '',
    id_parfum: '',
    id_customer: '',
    total_price: '',
    total_service: '',
    id_discount: '',
    information: '',
  };

  constructor(
    private api: ApiServiceService,
    private router: Router,
    private alertController: AlertController,
    private modalController: ModalController
  ) {}

  ngOnInit() {
    const state = this.router.getCurrentNavigation()?.extras.state;
    if (state) {
      this.customer = state['customer'];
      this.duration = state['duration'];
    }
    this.GetPaket();
    this.checkForRefresh();
    this.GetParfum();
    this.GetDiskon();
  }

  GetPaket() {
    this.api.GetListPaket().subscribe((res: any) => {
      this.DataPaket = res['data']['packages']
        .filter((paket: any) => paket.id_duration === this.duration.id)
        .map((paket: any) => ({
          ...paket,
          quantity:
            paket.package_type === 'Kiloan' || paket.package_type === 'Meteran'
              ? 0.0
              : 0,
        }));
      console.log('Data Paket ===>' + JSON.stringify(this.DataPaket));
    });
  }

  GetParfum() {
    this.api.GetListParfum().subscribe((res: any) => {
      this.DataParfum = res['data']['parfums'];
      console.log('Data Parfum ===>' + JSON.stringify(this.DataParfum));
    });
  }

  GetDiskon() {
    this.api.GetListDiskon().subscribe((res: any) => {
      this.DataDiskon = res['discounts'].filter((discount: any) => {
        return (
          discount.discount_type === 'percentage' ||
          discount.discount_type === 'fixed'
        );
      });
      console.log('Data Diskon ===>' + JSON.stringify(this.DataDiskon));
    });
  }

  formatQuantity(paket: any): string {
    if (paket.package_type === 'Kiloan' || paket.package_type === 'Meteran') {
      return paket.quantity.toFixed(2);
    } else {
      return paket.quantity.toString();
    }
  }

  // increaseQuantity(paket: any) {
  //   if (paket.package_type === 'Kiloan' || paket.package_type === 'Meteran') {
  //     paket.quantity += 0.5;
  //   } else {
  //     paket.quantity++;
  //   }
  //   this.updateTotals();
  // }

  increaseQuantity(paket: any) {
    if (paket.package_type === 'Kiloan' || paket.package_type === 'Meteran') {
      paket.quantity = parseFloat((paket.quantity + 0.01).toFixed(2));
    } else {
      paket.quantity++;
    }
    this.updateTotals();
  }

  // decreaseQuantity(paket: any) {
  //   if (paket.package_type === 'Kiloan' || paket.package_type === 'Meteran') {
  //     if (paket.quantity > 0) paket.quantity -= 0.5;
  //   } else {
  //     if (paket.quantity > 0) paket.quantity--;
  //   }
  //   this.updateTotals();
  // }

  decreaseQuantity(paket: any) {
    if (paket.quantity > 0) {
      if (paket.package_type === 'Kiloan' || paket.package_type === 'Meteran') {
        paket.quantity = parseFloat((paket.quantity - 0.01).toFixed(2));
      } else {
        paket.quantity--;
      }
      this.updateTotals();
    }
  }

  // onQuantityChange(paket: any, event: any) {
  //   const value = parseFloat(event.target.value);
  //   if (!isNaN(value)) {
  //     paket.quantity = value;
  //     this.updateTotals();
  //   }
  // }

  onQuantityChange(paket: any, event: any) {
    const value = event.target.value;
    const newQuantity = parseFloat(value);

    if (!isNaN(newQuantity) && newQuantity >= 0) {
      paket.quantity = newQuantity;
    } else {
      paket.quantity = 0;
    }

    this.updateTotals();
  }

  updateMetrics() {
    this.totalWeight = 0;
    this.totalPieces = 0;
    this.totalDistance = 0;

    this.DataPaket.forEach((paket) => {
      if (paket.package_type === 'Kiloan') {
        this.totalWeight += paket.quantity;
      } else if (paket.package_type === 'Satuan') {
        this.totalPieces += paket.quantity;
      } else if (paket.package_type === 'Meteran') {
        this.totalDistance += paket.quantity;
      }
    });
  }

  // updateTotals() {
  //   this.totalWeight = this.DataPaket.filter(
  //     (paket: any) => paket.package_type === 'Kiloan'
  //   ).reduce((acc, curr) => acc + curr.quantity, 0);
  //   this.totalPieces = this.DataPaket.filter(
  //     (paket: any) => paket.package_type !== 'Kiloan'
  //   ).reduce((acc, curr) => acc + curr.quantity, 0);
  //   this.totalDistance = this.DataPaket.reduce(
  //     (acc, curr) => acc + curr.distance,
  //     0
  //   );
  //   this.totalPrice = this.DataPaket.reduce(
  //     (acc, curr) => acc + curr.price * curr.quantity,
  //     0
  //   );
  // }

  updateTotals() {
    this.updateMetrics();
    this.totalPrice = this.DataPaket.reduce((total, paket) => {
      if (paket.package_type === 'Kiloan' || paket.package_type === 'Meteran') {
        return total + paket.quantity * paket.price;
      } else if (paket.package_type === 'Satuan') {
        return total + paket.quantity * paket.price;
      }
      return total;
    }, 0);
  }

  continueOrder() {
    this.isModalOpen = true;
  }
  openModal() {
    this.isModalOpen = true;
  }

  onWillDismiss(event: any) {
    this.isModalOpen = false;
  }

  dismissModal() {
    this.isModalOpen = false;
    this.modalController.dismiss();
  }

  buatPesanan() {
    const selectedPackages = this.DataPaket.filter(
      (paket: any) => paket.quantity > 0
    );
    this.form.list_id_package = selectedPackages
      .map((paket: any) => paket.id)
      .join(',');
    this.form.list_count = selectedPackages
      .map((paket: any) => paket.quantity)
      .join(',');
    this.form.id_parfum = this.parfum ? this.parfum : 'tidak';
    this.form.id_discount = this.diskon;
    this.form.information = this.catatan;
    this.form.id_customer = this.customer.id;

    this.form.total_price = this.totalPrice.toString();

    this.api.buatpesanan(this.form).subscribe(
      (res) => {
        this.showAlert('Pesanan Berhasil Dibuat', 'Sukses');
        this.router.navigate(['/rincianpesanan']);
      },
      (err) => {
        this.showAlert('Gagal Membuat Pesanan', 'Error');
      }
    );
  }

  async showAlert(header: string, subHeader: string) {
    const alert = await this.alertController.create({
      header,
      subHeader,
      buttons: ['OK'],
    });
    await alert.present();
  }

  checkForRefresh() {
    const navigation = this.router.getCurrentNavigation();
    if (navigation?.extras.state && navigation.extras.state['refresh']) {
      this.GetPaket();
    }
  }

  handleRefresh(event: any) {
    console.log('Refreshing data...');
    this.GetPaket();
    event.target.complete();
  }
}
