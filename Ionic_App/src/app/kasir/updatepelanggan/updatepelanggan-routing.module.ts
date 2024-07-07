import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { UpdatepelangganPage } from './updatepelanggan.page';

const routes: Routes = [
  {
    path: '',
    component: UpdatepelangganPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class UpdatepelangganPageRoutingModule {}
