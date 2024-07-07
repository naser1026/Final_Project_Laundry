import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { RincianpesananPageRoutingModule } from './rincianpesanan-routing.module';

import { RincianpesananPage } from './rincianpesanan.page';

import { CurrencyPipeModule } from '../../currency-pipe.module'; // Pastikan path sesuai

import { RouterModule, Routes } from '@angular/router'; // Pastikan mengimpor Routes

const routes: Routes = [
  {
    path: '',
    component: RincianpesananPage,
  },
];

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    RincianpesananPageRoutingModule,
    CurrencyPipeModule, // Sertakan modul di sini
    RouterModule.forChild(routes),
  ],
  declarations: [RincianpesananPage],
})
export class RincianpesananPageModule {}
