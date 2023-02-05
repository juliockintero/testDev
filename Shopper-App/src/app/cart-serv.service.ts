import { Injectable } from '@angular/core';
import { Item } from "./item"
@Injectable({
  providedIn: 'root'
})
export class CartServService {

  items: Item[] = [];

  addItem(item: Item): void {
    this.items.push(item);
  }

  getItems(): Item[] {
    return this.items;
  }
}
