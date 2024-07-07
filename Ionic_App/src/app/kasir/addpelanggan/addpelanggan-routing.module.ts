import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AddpelangganPage } from './addpelanggan.page';

const routes: Routes = [
  {
    path: '',
    component: AddpelangganPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AddpelangganPageRoutingModule {}
