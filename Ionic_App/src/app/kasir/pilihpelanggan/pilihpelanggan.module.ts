import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { PilihpelangganPageRoutingModule } from './pilihpelanggan-routing.module';

import { PilihpelangganPage } from './pilihpelanggan.page';
import { CurrencyPipeModule } from '../../currency-pipe.module'; // Pastikan path sesuai

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    PilihpelangganPageRoutingModule,
    CurrencyPipeModule, // Sertakan modul di sini
  ],
  declarations: [PilihpelangganPage],
})
export class PilihpelangganPageModule {}
