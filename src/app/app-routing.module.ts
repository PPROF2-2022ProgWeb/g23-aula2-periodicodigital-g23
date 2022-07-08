import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import {InicioComponent,
  ContactoComponent,
  EditorialComponent, 
  SobreNosotrosComponent,
  AntoCVComponent,
  GastonCVComponent,
  KevinCVComponent,
  MarcosCVComponent,
  MaxiCVComponent,
  RodrigoCVComponent,
  YamilCVComponent,
  AlertaCoronavirusComponent,
  FormularioComponent,
  FormularioBienvenidaComponent,
  GlobalizacionComponent,
  SembrandoEnCasaComponent,
  TrabajoInformalComponent

} from "./Pages/index.paginas";

const routes: Routes = [
  { path: 'Inicio', component: InicioComponent },
  { path: 'Editorial', component: EditorialComponent },
  { path: 'Contacto', component: ContactoComponent },
  { path: 'SobreNosotros', component: SobreNosotrosComponent },
  { path: 'AntoCV', component: AntoCVComponent },
  { path: 'GastonCV', component: GastonCVComponent },
  { path: 'KevinCV', component: KevinCVComponent },
  { path: 'MarcosCV', component: MarcosCVComponent },
  { path: 'MaxiCV', component: MaxiCVComponent },
  { path: 'RodrigoCV', component: RodrigoCVComponent },
  { path: 'YamilCV', component: YamilCVComponent },
  { path: 'AlertaCoronavirus', component: AlertaCoronavirusComponent },
  { path: 'Formulario', component: FormularioComponent },
  { path: 'FormularioBienvenida', component: FormularioBienvenidaComponent },
  { path: 'Globalizacion', component: GlobalizacionComponent },
  { path: 'SembrandoEnCasa', component: SembrandoEnCasaComponent },
  { path: 'TrabajoInformal', component: TrabajoInformalComponent },
  { path: '**', pathMatch:'full', redirectTo: 'Inicio' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }


