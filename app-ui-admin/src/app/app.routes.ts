import { RouterModule, Routes } from '@angular/router';
import { HomeComponent } from './components/home/home.component';
import { AboutComponent } from './components/about/about.component';
import { StudentsComponent } from './components/students/students.component';

const APP_ROUTES: Routes = [
    { path: 'home', component: HomeComponent },
    { path: 'about/:id', component: AboutComponent },
    { path: 'students', component: StudentsComponent },
    { path: '**', pathMatch: 'full', redirectTo: 'home' }
]

export const APP_ROUNTING = RouterModule.forRoot(APP_ROUTES);