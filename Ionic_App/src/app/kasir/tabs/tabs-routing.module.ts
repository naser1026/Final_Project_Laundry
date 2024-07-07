import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { TabsPage } from './tabs.page';

const routes: Routes = [
  {
    path: '',
    component: TabsPage,
    children: [
      {
        path: 'menu',
        loadChildren: () =>
          import('../menu/menu.module').then((m) => m.MenuPageModule),
      },
      {
        path: 'pesanan',
        loadChildren: () =>
          import('../pesanan/pesanan.module').then((m) => m.PesananPageModule),
      },
      {
        path: '',
        redirectTo: 'pesanan',
        pathMatch: 'full',
      },
      {
        path: '**', // Fallback route
        redirectTo: 'pesanan',
        pathMatch: 'full',
      },
    ],
  },
  {
    path: '**', // Global fallback route
    redirectTo: '',
    pathMatch: 'full',
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class TabsPageRoutingModule {}
