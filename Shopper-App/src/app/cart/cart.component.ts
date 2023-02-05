import { Component, OnInit } from '@angular/core';
import { CartServService } from '../cart-serv.service';
import { Item } from "../item"


@Component({
  selector: 'app-cart',
  templateUrl: './cart.component.html',
  styleUrls: ['./cart.component.scss']
})
export class CartComponent implements OnInit {
  items: Item[] = [];

  constructor(private shoppingCartService: CartServService) { }

  ngOnInit(): void {
    this.items = this.shoppingCartService.getItems();
  }

}
