import { Component, OnDestroy, OnInit } from '@angular/core';
import { interval, Subject } from 'rxjs';
import { takeUntil } from 'rxjs/operators';


@Component({
  selector: 'app-clock',
  templateUrl: './clock.component.html',
  styleUrls: ['./clock.component.css']
})
export class ClockComponent implements OnInit, OnDestroy {


  dateTime = new Date();
  private $inActive = new Subject<boolean>();
  
  ngOnInit(): void {
    
    this.startClock();

  }

  startClock() {
    interval(1).pipe(takeUntil(this.$inActive)).subscribe(data => {
      this.dateTime = new Date();

    })
  }

  ngOnDestroy(): void {
    this.$inActive.next(true);
    this.$inActive.unsubscribe();
  }

}
