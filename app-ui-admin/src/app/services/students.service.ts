import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class StudentsService {

    students:any[] = [];

    urlBusqueda:string = "http://www.serprosac.com/api/public/index.php/api/alumnos";
    
    constructor(private http:Http) {
        console.log("Servicio listo para usar!!!");
    }

    getStudents(termino:string) {
        return this.http.get(this.urlBusqueda)
        .map(res => {
            this.students = res.json();
            console.log(this.students);
        });
    }
}