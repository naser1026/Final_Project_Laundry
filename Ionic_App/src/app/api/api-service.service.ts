import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { environment } from 'src/environments/environment';
// import { Observable } from 'rxjs';
@Injectable({
  providedIn: 'root',
})
export class ApiServiceService {
  constructor(private http: HttpClient) {}

  // GetOrderDetails(orderId: string): Observable<any> {
  //   return this.http.get<any>('https://www.kiwifresh.my.id/api/order${orderId}`);
  // }

  GetListCustomer() {
    return this.http.get('https://www.kiwifresh.my.id/api/customer', {});
  }

  GetOrderDetails(id: any) {
    return this.http.get('https://www.kiwifresh.my.id/api/order/' + id, {
      responseType: 'json',
    });
  }

  CreateCustomer(form: any) {
    return this.http.post(
      'https://www.kiwifresh.my.id/api/customer',
      {
        name: form.name,
        phone_number: form.phone_number,
      },
      { responseType: 'json' }
    );
  }

  UpdateCustomer(id: any, form: any) {
    return this.http.put(
      'https://www.kiwifresh.my.id/api/customer/' + id,
      {
        name: form.name,
        phone_number: form.phone_number,
        created_by: form.created_by,
      },
      { responseType: 'json' }
    );
  }

  public DeleteCustomer(id: any) {
    return this.http.delete('https://www.kiwifresh.my.id/api/customer/' + id);
  }

  GetListDuration() {
    return this.http.get('https://www.kiwifresh.my.id/api/duration', {});
  }

  GetListParfum() {
    return this.http.get('https://www.kiwifresh.my.id/api/parfum', {});
  }

  GetListDiskon() {
    return this.http.get('https://www.kiwifresh.my.id/api/discount', {});
  }

  GetListPaket() {
    return this.http.get('https://www.kiwifresh.my.id/api/package', {});
  }

  GetListOrder() {
    return this.http.get('https://www.kiwifresh.my.id/api/order', {});
  }

  GetOrderDetail(id: any) {
    return this.http.get('https://www.kiwifresh.my.id/api/orderdetail/' + id);
  }

  public DeleteOrder(id: any) {
    return this.http.delete('https://www.kiwifresh.my.id/api/order/' + id);
  }

  // UpdateStatusPayment(id: any) {
  //   return this.http.put(
  //     `${'https://www.kiwifresh.my.idi/order/payment/${id}`,
  //     {},
  //     { responseType: 'json' }
  //   );
  // }

  UpdateStatusPayment(id: any) {
    return this.http.get('https://www.kiwifresh.my.id/api/order/{payment_type}' + id);
  }

  buatpesanan(form: any) {
    return this.http.post(
      'https://www.kiwifresh.my.id/api/order',
      {
        list_id_package: form.list_id_package,
        list_count: form.list_count,
        id_parfum: form.id_parfum,
        id_customer: form.id_customer,
        total_price: form.total_price,
        total_service: form.total_service,
        id_discount: form.id_discount,
        information: form.information,
      },
      { responseType: 'json' }
    );
  }
}
