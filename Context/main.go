package main

import (
	"fmt"
	"context"
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

func main() {
	ctx := context.Background()
	
	// Adding data to the empty context
	ctx = context.WithValue(ctx, "key", "value")
	
	doSomething(ctx)
}