import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FinancingFormComponent } from './financing-form.component';

describe('FinancingFormComponent', () => {
  let component: FinancingFormComponent;
  let fixture: ComponentFixture<FinancingFormComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ FinancingFormComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(FinancingFormComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
