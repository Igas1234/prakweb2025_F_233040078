// =====================
// ARROW FUNCTION
// =====================
const tampilNama1 = (nama) => {
    return `Halo ${nama}`;
};

console.log(tampilNama1('Budi'));


// Arrow Function implicit return
const tampilNama2 = nama => `Halo ${nama}`;

console.log(tampilNama2('Budi'));


// =====================
// FILTER
// =====================
const angkaFilter = [-2, -1, 0, 1, 2, 3];

const arrFilter = angkaFilter.filter(a => a >= 0);

console.log(arrFilter); // [0, 1, 2, 3]


// =====================
// MAP
// =====================
const angkaMap = [1, 2, 3, 4, 5];

const angkabaru2 = angkaMap.map(a => a * 2);

console.log(angkabaru2); // [2, 4, 6, 8, 10]


// =====================
// REDUCE
// =====================
const angkaReduce = [1, 2, 3, 4, 5];

const angkabaru3 = angkaReduce.reduce(
    (accumulator, currentValue) => accumulator + currentValue,
    0
);

console.log(angkabaru3); // 15


// Array
const kelas = ['A', 'B', 'C'];

// destructuring array
const [senin, rabu, kamis] = kelas;

console.log(`Kelas hari senin itu kelas: ${senin}`);
console.log(`Kelas hari rabu itu kelas: ${rabu}`);
console.log(`Kelas hari kamis itu kelas: ${kamis}`);


// Object
const mhs = {
    nama: 'Budi',
    umur: 20,
};

// destructuring object
const { nama, umur } = mhs;

console.log(`Nama mahasiswa: ${nama}`);
console.log(`Umur mahasiswa: ${umur}`);


// // Destructuring object dan assign ke variabel baru
// const mhs = {
//     nama: 'Budi',
//     umur: 20,
// };

// ganti nama variabel
const { nama: n, umur: u } = mhs;

console.log(`Nama mahasiswa: ${n}`);
console.log(`Umur mahasiswa: ${u}`);
