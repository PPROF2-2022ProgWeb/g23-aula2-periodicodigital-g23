/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { SembrandoEnCasaComponent } from './SembrandoEnCasa.component';

describe('SembrandoEnCasaComponent', () => {
  let component: SembrandoEnCasaComponent;
  let fixture: ComponentFixture<SembrandoEnCasaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ SembrandoEnCasaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(SembrandoEnCasaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
