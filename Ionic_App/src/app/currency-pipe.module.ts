import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CurrencyRpPipe } from './currencyRp.pipe';

@NgModule({
  declarations: [CurrencyRpPipe],
  imports: [CommonModule],
  exports: [CurrencyRpPipe],
})
export class CurrencyPipeModule {}
