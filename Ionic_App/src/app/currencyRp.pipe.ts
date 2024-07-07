import { Pipe, PipeTransform } from '@angular/core';

@Pipe({
  name: 'currencyRp',
})
export class CurrencyRpPipe implements PipeTransform {
  transform(value: number): string {
    // Menggunakan built-in currency pipe dengan locale Indonesia
    const formattedValue = new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR',
      minimumFractionDigits: 0,
    }).format(value);

    // Mengganti IDR dengan RP
    return formattedValue.replace('IDR', 'RP');
  }
}
