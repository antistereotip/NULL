// Promenljive za podešavanje stepper motora
#define STEPS_PER_REVOLUTION 360  // Broj koraka po punom krugu
#define STEPPER_PIN_1 8
#define STEPPER_PIN_2 9
#define STEPPER_PIN_3 10
#define STEPPER_PIN_4 11

// Vreme potrebno za okretanje za 120 stepeni (u milisekundama)
#define ROTATION_TIME 2000  // 2 sekunde

void setup() {
  // Postavljanje pinova stepper motora kao izlaznih
  pinMode(STEPPER_PIN_1, OUTPUT);
  pinMode(STEPPER_PIN_2, OUTPUT);
  pinMode(STEPPER_PIN_3, OUTPUT);
  pinMode(STEPPER_PIN_4, OUTPUT);
}

void loop() {
  // Okretanje u levo za 120 stepeni
  rotateLeft(120);
  delay(1000); // Pauza od 1 sekunde

  // Pauza od 1 sekunde na polovini puta
  delay(1000);

  // Okretanje u desno za 120 stepeni
  rotateRight(120);
  delay(1000); // Pauza od 1 sekunde

  // Pauza od 1 sekunde na polovini puta
  delay(1000);
}

// Funkcija za okretanje u levo za određeni broj stepeni
void rotateLeft(int degrees) {
  int stepsToTake = (STEPS_PER_REVOLUTION / 360.0) * degrees;
  for (int i = 0; i < stepsToTake; i++) {
    stepLeft();
    if (i == (stepsToTake / 2) - 1) {
      delay(1000); // Pauza od 1 sekunde na polovini puta
    }
    delayMicroseconds(ROTATION_TIME);  // Pauza između koraka
  }
}

// Funkcija za okretanje u desno za određeni broj stepeni
void rotateRight(int degrees) {
  int stepsToTake = (STEPS_PER_REVOLUTION / 360.0) * degrees;
  for (int i = 0; i < stepsToTake; i++) {
    stepRight();
    if (i == (stepsToTake / 2) - 1) {
      delay(1000); // Pauza od 1 sekunde na polovini puta
    }
    delayMicroseconds(ROTATION_TIME);  // Pauza između koraka
  }
}

// Funkcija za korak u levo
void stepLeft() {
  digitalWrite(STEPPER_PIN_1, HIGH);
  digitalWrite(STEPPER_PIN_2, LOW);
  digitalWrite(STEPPER_PIN_3, LOW);
  digitalWrite(STEPPER_PIN_4, LOW);
  delayMicroseconds(ROTATION_TIME);
  digitalWrite(STEPPER_PIN_1, LOW);
  digitalWrite(STEPPER_PIN_2, HIGH);
  digitalWrite(STEPPER_PIN_3, LOW);
  digitalWrite(STEPPER_PIN_4, LOW);
  delayMicroseconds(ROTATION_TIME);
  digitalWrite(STEPPER_PIN_1, LOW);
  digitalWrite(STEPPER_PIN_2, LOW);
  digitalWrite(STEPPER_PIN_3, HIGH);
  digitalWrite(STEPPER_PIN_4, LOW);
  delayMicroseconds(ROTATION_TIME);
  digitalWrite(STEPPER_PIN_1, LOW);
  digitalWrite(STEPPER_PIN_2, LOW);
  digitalWrite(STEPPER_PIN_3, LOW);
  digitalWrite(STEPPER_PIN_4, HIGH);
  delayMicroseconds(ROTATION_TIME);
}

// Funkcija za korak u desno
void stepRight() {
  digitalWrite(STEPPER_PIN_1, LOW);
  digitalWrite(STEPPER_PIN_2, LOW);
  digitalWrite(STEPPER_PIN_3, LOW);
  digitalWrite(STEPPER_PIN_4, HIGH);
  delayMicroseconds(ROTATION_TIME);
  digitalWrite(STEPPER_PIN_1, LOW);
  digitalWrite(STEPPER_PIN_2, LOW);
  digitalWrite(STEPPER_PIN_3, HIGH);
  digitalWrite(STEPPER_PIN_4, LOW);
  delayMicroseconds(ROTATION_TIME);
  digitalWrite(STEPPER_PIN_1, LOW);
  digitalWrite(STEPPER_PIN_2, HIGH);
  digitalWrite(STEPPER_PIN_3, LOW);
  digitalWrite(STEPPER_PIN_4, LOW);
  delayMicroseconds(ROTATION_TIME);
  digitalWrite(STEPPER_PIN_1, HIGH);
  digitalWrite(STEPPER_PIN_2, LOW);
  digitalWrite(STEPPER_PIN_3, LOW);
  digitalWrite(STEPPER_PIN_4, LOW);
  delayMicroseconds(ROTATION_TIME);
}
