import { Component, OnInit } from '@angular/core';
import { CartServService } from '../cart-serv.service';
import data from './data.json';
import { Item } from "../item"


@Component({
  selector: 'app-card',
  templateUrl: './card.component.html',
  styleUrls: ['./card.component.scss']
})
export class CardComponent implements OnInit {
  contacts = data;
  isButtonPressed: boolean = false;
  constructor(private shoppingCartService: CartServService) {

  }
  ngOnInit() {

  }

  toggleButton(): void {
    this.isButtonPressed = !this.isButtonPressed;
  }

  addToCart(item: Item): void {
    this.shoppingCartService.addItem(item)
    window.alert(`Added to your cart: ${item.name}`)
  }
}
