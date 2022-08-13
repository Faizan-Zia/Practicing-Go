package main

import (
	"fmt"
	"context"
	"time"
)

func doSomething(ctx context.Context) {
	fmt.Println("do something: ", ctx.Value("key"))
	anotherCtx := context.WithValue(ctx, "key", "more stuff!")
	doMore(anotherCtx)
	fmt.Println("do something: ", ctx.Value("key"))
}

func doMore(ctx context.Context) {
	fmt.Println("do more: ", ctx.Value("key"))
}

func assignTask(ctx context.Context) {
	ctx, cancelCtx := context.WithCancel(ctx)
	churnNumbers := make(chan int)
	go performTask(ctx, churnNumbers) 

	for i := 0; i <= 3; i++ {
		churnNumbers <- i
	}

	cancelCtx()

	time.Sleep(1000 * time.Millisecond)

	fmt.Println("Finished task assignment")
}

func performTask(ctx context.Context, ch chan int) {
	for {
		select {
		case <-ctx.Done():
			if err := ctx.Err(); err != nil {
				fmt.Println("Cancel Sig Recvd: ", err)
			}
			fmt.Println("Finished Task")
			return
		case num := <-ch:
			fmt.Println("Task Item:", num)
		}

	}
}

func main() {
	ctx := context.Background()
	
	// Adding data to the empty context
	ctx = context.WithValue(ctx, "key", "value")
	
	doSomething(ctx)

	// Testing the cancel context functionality
	assignTask(ctx)
}