import { CalculatorFinancing } from './../../calculator-financing';
import { DataService } from './../../service/data.service';
import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-financing-form',
  templateUrl: './financing-form.component.html',
  styleUrls: ['./financing-form.component.css']
})
export class FinancingFormComponent implements OnInit {

  financingForm:any;
  calculatorFinancing = new CalculatorFinancing;

  constructor(private dataService:DataService) {}

  ngOnInit(): void {}

  calculator() {
    this.dataService.sendData(this.calculatorFinancing).subscribe(result => {
      this.financingForm = result;
    });
  }

}
