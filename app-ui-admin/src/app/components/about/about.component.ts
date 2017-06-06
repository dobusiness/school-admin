import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { StudentsService} from '../../services/students.service';

@Component({
  selector: 'app-about',
  templateUrl: './about.component.html'
})
export class AboutComponent implements OnInit {

  student:any = {};

  constructor( private activateRoute: ActivatedRoute,
  private _studentService: StudentsService) {

      this.activateRoute.params.subscribe( params => {
        console.log(params['id']);
        //this.student = this._studentService.getStudent(params['id']);
      });

   }

  ngOnInit() {
  }

}
