import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { UpdatepelangganPageRoutingModule } from './updatepelanggan-routing.module';

import { UpdatepelangganPage } from './updatepelanggan.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    UpdatepelangganPageRoutingModule
  ],
  declarations: [UpdatepelangganPage]
})
export class UpdatepelangganPageModule {}
