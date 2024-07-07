import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AddpelangganPageRoutingModule } from './addpelanggan-routing.module';

import { AddpelangganPage } from './addpelanggan.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AddpelangganPageRoutingModule
  ],
  declarations: [AddpelangganPage]
})
export class AddpelangganPageModule {}
