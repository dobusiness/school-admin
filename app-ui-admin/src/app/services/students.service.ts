import { Injectable } from '@angular/core';
import { Http } from '@angular/http';
import 'rxjs/add/operator/map';

@Injectable()
export class StudentsService {

    students:any[] = [];

    hostName:string = "http://localhost";//"http://www.serprosac.com";
    rootAPI: string = "/api";
    urlBusqueda:string = this.hostName + this.rootAPI + "/public/alumnos";

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