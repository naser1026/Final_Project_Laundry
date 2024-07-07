import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { SearchpelangganPageRoutingModule } from './searchpelanggan-routing.module';

import { SearchpelangganPage } from './searchpelanggan.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    SearchpelangganPageRoutingModule
  ],
  declarations: [SearchpelangganPage]
})
export class SearchpelangganPageModule {}
