import { Component } from '@angular/core';
import { RouterModule, Router, Routes } from '@angular/router';


@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.scss']
})
export class NavbarComponent {
  constructor(private router: Router) { }
  redirectToCart() {
    this.router.navigate(['/cart']);
  }

}
