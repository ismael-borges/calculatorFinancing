import { CalculatorFinancing } from './../../calculator-financing';
import { DataService } from './../../service/data.service';
import { Component, OnInit } from '@angular/core';
import { NgToastService } from 'ng-angular-popup';

@Component({
  selector: 'app-financing-form',
  templateUrl: './financing-form.component.html',
  styleUrls: ['./financing-form.component.css']
})
export class FinancingFormComponent implements OnInit {

  financingForm:any;
  calculatorFinancing = new CalculatorFinancing;

  constructor(private dataService: DataService, private toast: NgToastService) {}

  ngOnInit(): void {}

  calculator() {
    this.dataService.sendData(this.calculatorFinancing).subscribe(result => {
      this.financingForm = result;
    }, err => {
      this.showWarning(err.error.message);
    });
  }

  showWarning(msg:any) {
    this.toast.warning({
      detail: "Atenção!",
      summary: msg,
      duration: 5000
    });
  }

}
