#!/usr/bin/perl
=commit
use Getopt::Std;
getopt("vdo",\%args);
print "$args{v} \t super \n" ;
print "$args{d} \t nice \n" ;
=cut
#!/usr/bin/perl
use strict;
use Getopt::Long;

# setup my defaults
my $name     = 'Bob';
my $age      = 26;
my $employed = 0;
my $help     = 0;

GetOptions(
    'name=s'    => \$name,
    'age=i'     => \$age,
    'employed' => \$employed,
    'help'     => \$help,
) or die "Incorrect usage!\n";

if( $help ) {
    print "Common on, it's really not that hard.\n";
} else {
    print "My name is $name.\n";
    print "I am $age years old.\n";
    print "I am currently " . ($employed ? '' : 'un') . "employed.\n";
}

