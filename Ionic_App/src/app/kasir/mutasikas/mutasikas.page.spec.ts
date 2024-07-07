import { ComponentFixture, TestBed } from '@angular/core/testing';
import { MutasikasPage } from './mutasikas.page';

describe('MutasikasPage', () => {
  let component: MutasikasPage;
  let fixture: ComponentFixture<MutasikasPage>;

  beforeEach(() => {
    fixture = TestBed.createComponent(MutasikasPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
