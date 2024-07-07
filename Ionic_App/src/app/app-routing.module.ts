import { NgModule } from '@angular/core';
import { PreloadAllModules, RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: 'home',
    loadChildren: () =>
      import('./home/home.module').then((m) => m.HomePageModule),
  },
  {
    path: '',
    redirectTo: 'login',
    pathMatch: 'full',
  },
  {
    path: 'login',
    loadChildren: () =>
      import('./login/login.module').then((m) => m.LoginPageModule),
  },
  {
    path: 'tabs',
    loadChildren: () =>
      import('./kasir/tabs/tabs.module').then((m) => m.TabsPageModule),
  },
  {
    path: 'pesanan',
    loadChildren: () =>
      import('./kasir/pesanan/pesanan.module').then((m) => m.PesananPageModule),
  },
  {
    path: 'menu',
    loadChildren: () =>
      import('./kasir/menu/menu.module').then((m) => m.MenuPageModule),
  },
  {
    path: 'addpesanan',
    loadChildren: () =>
      import('./kasir/addpesanan/addpesanan.module').then(
        (m) => m.AddpesananPageModule
      ),
  },
  {
    path: 'mutasikas',
    loadChildren: () =>
      import('./kasir/mutasikas/mutasikas.module').then(
        (m) => m.MutasikasPageModule
      ),
  },
  {
    path: 'addpelanggan',
    loadChildren: () =>
      import('./kasir/addpelanggan/addpelanggan.module').then(
        (m) => m.AddpelangganPageModule
      ),
  },
  {
    path: 'searchpelanggan',
    loadChildren: () =>
      import('./kasir/searchpelanggan/searchpelanggan.module').then(
        (m) => m.SearchpelangganPageModule
      ),
  },
  {
    path: 'updatepelanggan',
    loadChildren: () =>
      import('./kasir/updatepelanggan/updatepelanggan.module').then(
        (m) => m.UpdatepelangganPageModule
      ),
  },
  {
    path: 'pilihpelanggan',
    loadChildren: () =>
      import('./kasir/pilihpelanggan/pilihpelanggan.module').then(
        (m) => m.PilihpelangganPageModule
      ),
  },
  {
    path: 'rincianpesanan/:id',
    loadChildren: () =>
      import('./kasir/rincianpesanan/rincianpesanan.module').then(
        (m) => m.RincianpesananPageModule
      ),
  },
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes, { preloadingStrategy: PreloadAllModules }),
  ],
  exports: [RouterModule],
})
export class AppRoutingModule {}
