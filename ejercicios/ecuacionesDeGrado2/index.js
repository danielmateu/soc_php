//  Escribe un programa que resuelva ecuaciones de segundo grado

const ecuacion = (a, b, c) => {
    let x1 = (-b + Math.sqrt(Math.pow(b, 2) - 4 * a * c)) / (2 * a);
    let x2 = (-b - Math.sqrt(Math.pow(b, 2) - 4 * a * c)) / (2 * a);
    return [x1, x2];
}

console.log(ecuacion(1, 4, 4));
console.log(ecuacion(1, 0, -4));
console.log(ecuacion(1, 0, 4)); // NaN


