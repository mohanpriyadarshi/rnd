#!/usr/bin/perl
#usage maparg.pl filename.gz | filename
($A) = map { /\.(gz|Z)$/ ? "gzip -dc $_ |" :$_} @ARGV;
print "$A \n" ;
open (FH,$A)or die "unable to open $!";
while(<FH>)
{
print ;
}
