import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { CalculatorFinancing } from '../calculator-financing';

@Injectable({
  providedIn: 'root'
})
export class DataService {

  constructor(private httpClient: HttpClient) {}

  sendData(data: CalculatorFinancing) {
    return this.httpClient.post('http://localhost:80/api/calculate-financing', data);
  }
}
