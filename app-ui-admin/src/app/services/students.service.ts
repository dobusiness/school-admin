import { Injectable } from '@angular/core';

@Injectable()
export class StudentsService {

    private students:Student[] = [
        {
            nombre: "Luis Enrique Bazan Chavez",
            descripcion: "Prueba",
            img: "assets/img/1.jpg",
            fecha: "2017-02-01",
            ciudad: "Lima"
        },
        {
            nombre: "Heidy Bendezu Lopez",
            descripcion: "Prueba",
            img: "assets/img/2.jpg",
            fecha: "2017-02-01",
            ciudad: "Lima"
        },
        {
            nombre: "Pepito Perez Marlon",
            descripcion: "Prueba",
            img: "assets/img/3.jpg",
            fecha: "2017-02-01",
            ciudad: "Lima"
        },
        {
            nombre: "Pepito Perez Marlon",
            descripcion: "Prueba",
            img: "assets/img/3.jpg",
            fecha: "2017-02-01",
            ciudad: "Lima"
        },
        {
            nombre: "Pepito Perez Marlon",
            descripcion: "Prueba",
            img: "assets/img/3.jpg",
            fecha: "2017-02-01",
            ciudad: "Lima"
        }
    ];

    constructor() {
        console.log("Servicio listo para usar!!!");
    }

    getStudents():Student[] {
        return this.students;
    }

    getStudent(idx:string):Student {
        return this.students[idx];
    }

    searchStudent(termino:string) {
        let studentsArr:Student[] = [];
        termino = termino.toLowerCase();
        for(let student of this.students) {
            let nombre = student.nombre.toLocaleLowerCase();
            if(nombre.indexOf(termino)>=0){
                studentsArr.push(student);
            }
        }
        return studentsArr;
    }
}

export interface Student {
    nombre: string;
    descripcion: string;
    img: string;
    fecha: string;
    ciudad: string;
}
