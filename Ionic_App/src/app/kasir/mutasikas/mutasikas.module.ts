import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { MutasikasPageRoutingModule } from './mutasikas-routing.module';

import { MutasikasPage } from './mutasikas.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    MutasikasPageRoutingModule
  ],
  declarations: [MutasikasPage]
})
export class MutasikasPageModule {}
