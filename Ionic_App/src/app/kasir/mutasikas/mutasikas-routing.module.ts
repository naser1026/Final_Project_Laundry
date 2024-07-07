import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { MutasikasPage } from './mutasikas.page';

const routes: Routes = [
  {
    path: '',
    component: MutasikasPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class MutasikasPageRoutingModule {}
