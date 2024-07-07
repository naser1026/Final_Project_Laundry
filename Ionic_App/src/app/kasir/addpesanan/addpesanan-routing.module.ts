import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AddpesananPage } from './addpesanan.page';

const routes: Routes = [
  {
    path: '',
    component: AddpesananPage,
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AddpesananPageRoutingModule {}
