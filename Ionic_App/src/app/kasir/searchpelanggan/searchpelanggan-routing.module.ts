import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { SearchpelangganPage } from './searchpelanggan.page';

const routes: Routes = [
  {
    path: '',
    component: SearchpelangganPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class SearchpelangganPageRoutingModule {}
