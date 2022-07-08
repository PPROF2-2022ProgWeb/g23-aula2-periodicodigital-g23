import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { RouterModule } from '@angular/router';

//Rutas
import { AppRoutingModule } from './app-routing.module';
// import { appRouting } from './app.routes';
//Servicios/Providers

//Componentes
import { AppComponent } from './app.component';
//Modulos
import { LayoutModule } from './Layout/Layout.module';
import { PagesModule } from './Pages/Pages.module';


@NgModule({
  declarations: [	
    AppComponent,

   ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    LayoutModule,
    PagesModule,
    RouterModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
