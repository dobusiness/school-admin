import { Component, OnInit } from '@angular/core';
import { StudentsService } from '../../services/students.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-students',
  templateUrl: './students.component.html'
})
export class StudentsComponent implements OnInit {

  //students:Student[] = [];

  constructor(public _studentsService:StudentsService,
    private router:Router) { 

  }

  ngOnInit() {
    //this.students = this._studentsService.getStudents();
    this._studentsService.getStudents("test")
    .subscribe();
  }

  showStudent( idx: number) {
    this.router.navigate( ['/about', idx]);
  }
}
