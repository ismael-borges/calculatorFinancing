import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { FinancingFormComponent } from './components/financing-form/financing-form.component';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { NgToastModule } from 'ng-angular-popup';

const appRoutes: Routes = [
  {
    path: '',
    component: FinancingFormComponent
  }
];

@NgModule({
  declarations: [
    AppComponent,
    FinancingFormComponent
  ],
  imports: [
    NgToastModule,
    BrowserModule,
    HttpClientModule,
    FormsModule,
    RouterModule.forRoot(appRoutes)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
