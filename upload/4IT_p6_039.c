#include<stdio.h>
#include<string.h>
#include<fcntl.h>
void file_to_terminal()
{
	int fd,n;
	char fn[100],buff[1000];
	printf("\nEnter the file name :");
	scanf("%s",fn);
	fd=open(fn,O_RDONLY);
	n=read(fd,buff,1000);
	write(1,buff,n);
	close(fd);
};
void remove_file()
{
	char fn[100];
	printf("\nEnter the name of the file you want to remove:");
	scanf("%s",fn);
	remove(fn);
};
void file_to_file()
{
	int fd1,n,fd2;
	char fn1[100],fn2[100],buff[10000];
	printf("\nEnter the file name from where you want to copy data:");
	scanf("%s",fn1);
	printf("\nEnter the file name where you want to copy data:");
	scanf("%s",fn2);
	fd1=open(fn1,O_RDONLY);
	n=read(fd1,buff,10000);
	fd2=open(fn2,O_CREAT|O_WRONLY);
	write(fd2,buff,n);
	close(fd1);
	close(fd2);
};
void terminal_to_file()
{
	int n,fd;
	char fn[100],buff[10000];
	printf("\nEnter the file name in which you want to copy the data of the terminal:");
	scanf("%s",fn);
	printf("\nEnter the content :");
	scanf("%s",buff);
	n=strlen(buff);
	fd=open(fn,O_CREAT|O_WRONLY);
	write(fd,buff,n);
	close(fd);
};
void main()
{
	int a,b;
	do
	{
		printf("\n----------Enter your choice----------");
		printf("\n1.Copy the data from file to terminal");
		printf("\n2.Copy the data from terminal to file");
		printf("\n3.Copy the data from file to file");
		printf("\n4.Remove the file\n");
		scanf("%d",&a);
		switch(a)
		{
			case 1 : file_to_terminal();
				 break;
			case 2 : terminal_to_file();
				 break;
			case 3 : file_to_file();
				 break;
			case 4 : remove_file();
				 break;
			default : printf("\nYou have entered wrong choice");
				 break;
		}
		printf("\nEnter 0 for continue and 9 for exit");
		scanf("%d",&b);
	}while(b==0);
	printf("\n");
}	
