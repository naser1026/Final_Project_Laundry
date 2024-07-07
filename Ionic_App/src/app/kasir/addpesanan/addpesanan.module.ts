import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { IonicModule } from '@ionic/angular';

import { AddpesananPageRoutingModule } from './addpesanan-routing.module';
import { AddpesananPage } from './addpesanan.page';
import { CurrencyPipeModule } from '../../currency-pipe.module'; // Pastikan path sesuai

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AddpesananPageRoutingModule,
    CurrencyPipeModule, // Sertakan modul di sini
  ],
  declarations: [AddpesananPage], // Hapus deklarasi CurrencyRpPipe dari sini
})
export class AddpesananPageModule {}
