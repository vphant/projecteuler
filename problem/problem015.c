/**
 * Lattice paths
 * https://projecteuler.net/problem=15
 * Still needs optimization (take 10 mins to calculate)
 */
#include <stdio.h>

#define true 1
#define false 0
#define size 20

typedef unsigned long long int ulli;

void findChildren (int x, int y, ulli *score); 

int main()
{
  int x = 1;
  int y = 1;
  ulli score = 0;
  ulli *scorePointer;
  
  scorePointer = &score;

  findChildren(x, y, scorePointer);
  ulli result = score + 1;

  printf("Answer: %llu\n", result);

  return 0;
}

void findChildren(int x, int y, ulli *score)
{
  int children = false;
  
  if (y != size) {
     findChildren(x, (y + 1), score);
  }

  if (x != size) {
     findChildren((x + 1), y, score);
  }

  if (children == false) {
    *score = *score + 1;
  }
}
