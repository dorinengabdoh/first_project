use std::io;
use std::error::Error;
use std::fs::File;
use std::io::prelude::*;
use std::path::Path;
use std::io::Result;
use std::fs; 
use std::io::Write;

fn main(){
     let  mut answer= String::new();
     let  mut s= String::new();
     let path = Path::new("dodo.txt");
     let display = path.display();
     println!("What do you want to do?");
     println!("1. to add a new task");
     println!("2. Not ");
     /*println!("3. to view the spots");
     println!("4. to mark the completed task");
     println!("5. to add the delay");
     println!("6. to make the update");*/
     println!("make your choice");
     io::stdin().read_line(&mut answer).expect ("failed please check the problem");
     let answer:usize = answer.trim().parse().expect("L'indice entré n'est pas un nombre");   
     let mut file=File::options().read(true).write(true).open(&path);
     let mut v = Vec::new();
     if answer==1{
        println!("please add a new task to your list");
        io::stdin().read_line(&mut s).expect ("failed please check the problem");
        println!("your new spot is: {}", s);
            let mut file = File::options()
                       .read(true)
                       .write(true)
                        .open("dodo.txt");
             let mut file = match File::options().read(true).write(true).open(&path) {
                  Err(why) => panic!("couldn't open {}: {}", display,
                                                    why.description()),
                   Ok(file) => file,
                    };
              let mut se = String::new();
              match file.read_to_string(&mut s) {
              Err(why) => panic!("couldn't read {}: {}", display,
                                                  why.description()),
              Ok(_) => print!("{} contains:\n{}", display, s),
           }  
          for i in &v {
            println!("{}", s);
            let mut file = File::create("dodo.txt").expect("failed for write to this file"); 
            } 
            let s=s.as_bytes();
           v.push(s); 
             //let mut file = File::create("dodo.txt").expect("failed for write to this file"); 
            // file.write_all(se);
              match file.write_all(s) {
                 Err(why) => {
              panic!("couldn't write to {}: {}", display,
                                            why.description())                          
                           },
                     Ok(_)=>("wrote"),
                        };
     let  mut r= String::new();
     println!("Bravoo!!! do you want to do anything else???  ");
     println!("1. Yes");
     println!("2. No");
     io::stdin().read_line(&mut r).expect ("failed please check the problem");
     let r:usize = r.trim().parse().expect("L'indice entré n'est pas un nombre"); 
     if r==1{
      println!("what do you want to do??");
      println!("1. view all the stain");
      println!("2.Remove a stain");
      println!("3 to mark the completed task");
      println!("4. to add the delay");
      println!("5. to make the update");
      let mut re=String::new();
      io::stdin().read_line(&mut re).expect ("failed please check the problem");
      let re:usize = re.trim().parse().expect("L'indice entré n'est pas un nombre"); 
      if re==1{
          println!("1. This is  all your stain\n");
          let path = Path::new("dodo.txt");
           let mut file=File::open(&path).expect("can not open the file");
          let mut content = String::new();
          file.read_to_string(&mut content).expect("oopp! can not read the file");
          println!("do you want to see all your task???\n");
           //println!("this is it \n{}");
         println!("file contains:\n{}",content);
      } 
      if re==2{
          println!("you can remove your stain");
          println!("vew all your spot");
          let path = Path::new("dodo.txt");
          let mut file=File::open(&path).expect("can not open the file");
          let mut r = String::new();
          let mut content = String::new();
          file.read_to_string(&mut content).expect("oopp! can not read the file");
          println!("file contains:\n{}",content);
          println!("Write stain you want to remove here!!");
          io::stdin().read_line(&mut r).expect ("failed please check the problem");
          //let r:usize = r.trim().parse().expect("L'indice entré n'est pas un nombre");
          println!("you have deleted : {}",r);
          let mut file = File::options()
                        .read(true)
                        .write(true)
                         .open("rem.txt");
          let mut n=1;               
                        // println!("file contains:\n{}",content);
          let r=r.as_bytes();
               while r==s{
                  let mut file =File::create("rem.txt").expect("could not write to file");   
                  match file.write_all(s) {
                     Err(why) => {
                  panic!("couldn't write to {}: {}", display,
                                                why.description())                          
                               },
                         Ok(_)=>("wrote"),
                            };  
              let mut file = File::create("rem.txt").expect("failed for write to this file"); 
            // file.write_all(se);
              match file.write_all(s) {
                 Err(why) => {
              panic!("couldn't write to {}: {}", display,
                                            why.description())                          
                           },
                     Ok(_)=>("wrote"),
                        }; 
               }

}
         if  re==3{
          let mut a = String::new();
             println!("mark you completed task");
             println!("which task is already completed??");
             io::stdin().read_line(&mut a).expect ("failed please check the problem");
              while a==s{

              }
              println!("your task is completed??");

         }
         if  re==4{
          println!("add the delay");

      }
      if  re==5{
          println!("make and update");

      }

      }
      


     }
     

     /*  if answer==2{
          println!("you can remove your stain");
          println!("vew all your spot");
          let path = Path::new("dodo.txt");
          let mut file=File::open(&path).expect("can not open the file");
          let mut r = String::new();
          let mut content = String::new();
          file.read_to_string(&mut content).expect("oopp! can not read the file");
          println!("file contains:\n{}",content);
          println!("Write stain you want to remove here!!");
          io::stdin().read_line(&mut r).expect ("failed please check the problem");
          println!("you have deleted : {}",r);
          let mut file = File::options()
                        .read(true)
                        .write(true)
                         .open("rem.txt");
          let mut n=1;               
                        // println!("file contains:\n{}",content);
                         while r==s{
                         let r=r.as_bytes();
                  let mut file =File::create("rem.txt").expect("could not write to file");   
                  match file.write_all(r) {
                     Err(why) => {
                  panic!("couldn't write to {}: {}", display,
                                                why.description())                          
                               },
                         Ok(_)=>("wrote"),
                            };   
                         }

}
if answer==3{
   let path = Path::new("dodo.txt");
   let mut file=File::open(&path).expect("can not open the file");
   let mut content = String::new();
   file.read_to_string(&mut content).expect("oopp! can not read the file");
        println!("do you want to see all your task???");
        //println!("this is it \n{}");
        println!("file contains:\n{}",content);
       
   }
   if answer==4{
      println!("can you mark the completed task");
 }
 if answer==5{
      println!("you want to add the delay??   ");
 }
 if answer==6{
      println!("make the update");
 }
 */ 
}