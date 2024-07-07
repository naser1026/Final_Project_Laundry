import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { PesananPageRoutingModule } from './pesanan-routing.module';

import { PesananPage } from './pesanan.page';
import { CurrencyPipeModule } from '../../currency-pipe.module'; // Pastikan path sesuai

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    PesananPageRoutingModule,
    CurrencyPipeModule, // Sertakan modul di sini
  ],
  declarations: [PesananPage],
})
export class PesananPageModule {}
