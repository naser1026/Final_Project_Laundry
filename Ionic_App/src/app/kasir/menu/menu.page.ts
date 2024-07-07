import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-menu',
  templateUrl: './menu.page.html',
  styleUrls: ['./menu.page.scss'],
})
export class MenuPage implements OnInit {
  public alertButtons = [
    {
      text: 'Cancel',
      role: 'cancel',
      handler: () => {
        console.log('Alert canceled');
      },
    },
    {
      text: 'OK',
      role: 'confirm',
      handler: () => {
        console.log('Alert confirmed');
      },
    },
  ];

  setResult(ev: CustomEvent) {
    if (ev && ev.detail && ev.detail.role) {
      console.log(`Dismissed with role: ${ev.detail.role}`);
    } else {
      console.error('Event detail or role is missing:', ev);
    }
  }
  constructor() {}

  ngOnInit() {}
}
